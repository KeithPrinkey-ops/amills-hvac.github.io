<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationFormRequest;
use App\Http\Resources\ConsultationFormResource;
use App\Models\ConsultationForm;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ConsultationFormController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', ConsultationForm::class);

        return ConsultationFormResource::collection(ConsultationForm::all());
    }

    public function store(ConsultationFormRequest $request)
    {
        $this->authorize('create', ConsultationForm::class);

        return new ConsultationFormResource(ConsultationForm::create($request->validated()));
    }

    public function show(ConsultationForm $consultationForm)
    {
        $this->authorize('view', $consultationForm);

        return new ConsultationFormResource($consultationForm);
    }

    public function update(ConsultationFormRequest $request, ConsultationForm $consultationForm)
    {
        $this->authorize('update', $consultationForm);

        $consultationForm->update($request->validated());

        return new ConsultationFormResource($consultationForm);
    }

    public function destroy(ConsultationForm $consultationForm)
    {
        $this->authorize('delete', $consultationForm);

        $consultationForm->delete();

        return response()->json();
    }
}
