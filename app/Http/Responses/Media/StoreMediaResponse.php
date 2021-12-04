<?php

namespace App\Http\Responses\Media;

use App\Contracts\Http\Responses\Media\StoreMediaResponse as StoreMediaContractResponse;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\MediaResource;

class StoreMediaResponse implements StoreMediaContractResponse
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function toResponse($request)
    {
        return $request->wantsJson()
             ? new JsonResponse([
                'media' => new MediaResource($this->data['media']),
             ], 200)
             : null;
    }
}
