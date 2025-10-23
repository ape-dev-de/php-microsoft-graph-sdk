<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentitySet
 */
class IdentitySet
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
    }
}
