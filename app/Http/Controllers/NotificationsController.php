<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationsRequest;
use App\Http\Resources\NotificationsResource;
use App\Models\Notifications;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Notifications\DatabaseNotification;

class NotificationsController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Notifications::class);

        return NotificationsResource::collection(Notifications::all());
    }

    public function store(NotificationsRequest $request)
    {
        $this->authorize('create', Notifications::class);

        return new NotificationsResource(Notifications::create($request->validated()));
    }

    public function show(Notifications $notifications)
    {
        $this->authorize('view', $notifications);

        return new NotificationsResource($notifications);
    }

    public function update(NotificationsRequest $request, Notifications $notifications)
    {
        $this->authorize('update', $notifications);

        $notifications->update($request->validated());

        return new NotificationsResource($notifications);
    }

    public function destroy(Notifications $notifications)
    {
        $this->authorize('delete', $notifications);

        $notifications->delete();

        return response()->json();
    }
}
