<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentApprovalRoute
 */
class AppConsentApprovalRoute
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of appConsentRequest objects representing apps for which admin consent has been requested by one or more users.
     * @var AppConsentRequest[]
     */
    public array $appConsentRequests = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appConsentRequests'])) {
            $this->appConsentRequests = $data['appConsentRequests'];
        }
    }
}
