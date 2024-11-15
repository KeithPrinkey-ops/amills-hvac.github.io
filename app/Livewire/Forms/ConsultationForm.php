<?php
namespace App\Livewire\Forms;

use AllowDynamicProperties;
use App\Models\Notifications;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Ramsey\Uuid\Uuid;
use App\Models\ConsultationForm as ConsultationFormModel; // Use an alias to differentiate the model


#[AllowDynamicProperties]
class ConsultationForm extends Component
{


use InteractsWithBanner;

#[Validate('required|string|max:255')]
public $name;

#[Validate('required|string|max:255')]
public $address;

#[Validate('required|email|max:254')]
public $email;

#[Validate('required|string')]
public $issue;

#[Validate('required|string')]
public $equipment_type;

#[Validate('required|string')]
public $consultation_type;

public $notification_id;
public $user_id;
public $consultations;

// Use mount for initialization instead of __construct()
public function mount()
{

    // Log memory usage at a specific point
    Log::info('Current memory usage: ' . memory_get_usage() . ' bytes');

// Peak memory usage since start of script
    Log::info('Peak memory usage: ' . memory_get_peak_usage() . ' bytes');
if (auth()->check()) {
$this->user_id = auth()->id();
logger("Authenticated user ID: " . $this->user_id);
} else {
logger("User is not authenticated.");
}
}

public function submit()
{
// Validate the form
$this->validate();

try {
$consultation = ConsultationFormModel::all(); // Retrieve all consultation forms
} catch (\Exception $e) {
dd($e->getMessage()); // Show any errors encountered during retrieval
}
    $notificationData = [
        'message' => 'New consultation request',
        'name' => $this->name,
        'address' => $this->address,
        'email' => $this->email,
        'issue' => $this->issue,
        'equipment_type' => $this->equipment_type,
        'consultation_type' => $this->consultation_type,


    ];
// Log the data to see if everything is set correctly
    Log::info('Creating consultation notification with data:', $notificationData);
// Create the notification
    $notification = DatabaseNotification::create([
        'id' => (string) Str::uuid(),
        'type' => 'App\Notifications\ConsultationRequested',
        'notifiable_type' => 'App\Models\User',
        'notifiable_id' => auth()->id(),
        'data' => $notificationData,
    ]);

// Store the consultation in the database with the UUID
try {
    ConsultationFormModel::create([
        'name' => $this->name,
        'address' => $this->address,
        'email' => $this->email,
        'issue' => $this->issue,
        'equipment_type' => $this->equipment_type,
        'consultation_type' => $this->consultation_type,
        'database_notification_id' => (string) $notification->id,
        'user_id' => $this->user_id,
    ]);
} catch (\Exception $e) {
dd($e->getMessage()); // Show any errors encountered during insertion
}

// Display the banner
$this->banner('Consultation request submitted successfully!');


// Reset the form after submission
$this->reset(['name', 'address', 'email', 'issue', 'equipment_type', 'consultation_type']);

return $consultation;
}

public function render()
{
$this->consultations = ConsultationForm::all(); // Retrieve all consultation forms
return view('livewire.forms.consultation-form-component', [
'consultations' => $this->consultations, // Pass the consultations to the view
])->layout('layouts.guest')->title('Request Consultation');
}
}
