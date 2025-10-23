<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointIdentitySet
 */
class SharePointIdentitySet
{
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
        if (isset($data['application'])) {
            $this->application = $data['application'];
        }
        if (isset($data['device'])) {
            $this->device = $data['device'];
        }
        if (isset($data['user'])) {
            $this->user = $data['user'];
        }
        if (isset($data['group'])) {
            $this->group = $data['group'];
        }
        if (isset($data['siteGroup'])) {
            $this->siteGroup = $data['siteGroup'];
        }
        if (isset($data['siteUser'])) {
            $this->siteUser = $data['siteUser'];
        }
    }
}
