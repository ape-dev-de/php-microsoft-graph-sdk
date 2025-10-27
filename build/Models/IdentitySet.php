<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentitySet
 */
class IdentitySet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Optional. The application associated with this action.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $application = null;

    /** 
     * Optional. The device associated with this action.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $device = null;

    /** 
     * Optional. The user associated with this action.
     * @var Identity|\stdClass|null
     */
    public Identity|\stdClass|null $user = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new Identity($data['application']) : $data['application'];
        }
        if (isset($data['device'])) {
            $this->device = is_array($data['device']) ? new Identity($data['device']) : $data['device'];
        }
        if (isset($data['user'])) {
            $this->user = is_array($data['user']) ? new Identity($data['user']) : $data['user'];
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
