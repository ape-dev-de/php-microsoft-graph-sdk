<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsParticipantBase
 */
class CallRecordsParticipantBase
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * List of administrativeUnitInfo objects for the call participant.
     * @var CallRecordsAdministrativeUnitInfo[]
     */
    public array $administrativeUnitInfos = [];

    /** 
     * The identity of the call participant.
     * @var CommunicationsIdentitySet|\stdClass|null
     */
    public mixed $identity = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['administrativeUnitInfos'])) {
            $this->administrativeUnitInfos = $data['administrativeUnitInfos'];
        }
        if (isset($data['identity'])) {
            $this->identity = $data['identity'];
        }
    }
}
