<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointIdentitySet
 */
class SharePointIdentitySet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Optional. The application associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $application = null;

    /** 
     * Optional. The device associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $device = null;

    /** 
     * Optional. The user associated with this action.
     * @var Identity|\stdClass|null
     */
    public mixed $user = null;

    /** 
     * The group associated with this action. Optional.
     * @var Identity|\stdClass|null
     */
    public mixed $group = null;

    /** 
     * The SharePoint group associated with this action. Optional.
     * @var SharePointIdentity|\stdClass|null
     */
    public mixed $siteGroup = null;

    /** 
     * The SharePoint user associated with this action. Optional.
     * @var SharePointIdentity|\stdClass|null
     */
    public mixed $siteUser = null;


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
        if (isset($data['group'])) {
            $this->group = is_array($data['group']) ? new Identity($data['group']) : $data['group'];
        }
        if (isset($data['siteGroup'])) {
            $this->siteGroup = is_array($data['siteGroup']) ? new SharePointIdentity($data['siteGroup']) : $data['siteGroup'];
        }
        if (isset($data['siteUser'])) {
            $this->siteUser = is_array($data['siteUser']) ? new SharePointIdentity($data['siteUser']) : $data['siteUser'];
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
