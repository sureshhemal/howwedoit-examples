<?php

namespace App\Post_01_Dependency_Injection\IO\Http\Controllers;

use App\Post_01_Dependency_Injection\UseCases\Services\SmsServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SmsController extends Controller
{
    /**
     * Send an SMS using dependency injection.
     */
    public function send(Request $request, SmsServiceInterface $smsService): JsonResponse
    {
        $this->validate($request, [
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $result = $smsService->sendSms(
            $request->input('phone'),
            $request->input('message')
        );

        return response()->json([
            'success' => true,
            'message' => $result,
        ]);
    }

    /**
     * Send an SMS by manually resolving the service from the container.
     */
    public function sendWithResolution(Request $request): JsonResponse
    {
        $this->validate($request, [
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        // Manually resolve the service from the container
        $smsService = app(SmsServiceInterface::class);

        $result = $smsService->sendSms(
            $request->input('phone'),
            $request->input('message')
        );

        return response()->json([
            'success' => true,
            'message' => $result,
        ]);
    }
}
