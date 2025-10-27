<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentRequest
 */
class AppConsentRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the app for which consent is requested. Required. Supports $filter (eq only) and $orderby. */
    public ?string $appDisplayName = null;

    /** The identifier of the application. Required. Supports $filter (eq only) and $orderby. */
    public ?string $appId = null;

    /** 
     * A list of pending scopes waiting for approval. Required.
     * @var AppConsentRequestScope[]
     */
    public array $pendingScopes = [];

    /** 
     * A list of pending user consent requests. Supports $filter (eq).
     * @var UserConsentRequest[]
     */
    public array $userConsentRequests = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appDisplayName'])) {
            $this->appDisplayName = $data['appDisplayName'];
        }
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['pendingScopes'])) {
            $this->pendingScopes = $data['pendingScopes'];
        }
        if (isset($data['userConsentRequests'])) {
            $this->userConsentRequests = $data['userConsentRequests'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
