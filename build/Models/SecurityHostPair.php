<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostPair
 */
class SecurityHostPair
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when Microsoft Defender Threat Intelligence first observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstSeenDateTime = null;

    /** The date and time when Microsoft Defender Threat Intelligence last observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastSeenDateTime = null;

    /** The reason that two hosts are identified as hostPair. */
    public ?string $linkKind = null;

    /**  */
    public ?SecurityHost $childHost = null;

    /**  */
    public ?SecurityHost $parentHost = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['firstSeenDateTime'])) {
            $this->firstSeenDateTime = $data['firstSeenDateTime'];
        }
        if (isset($data['lastSeenDateTime'])) {
            $this->lastSeenDateTime = $data['lastSeenDateTime'];
        }
        if (isset($data['linkKind'])) {
            $this->linkKind = $data['linkKind'];
        }
        if (isset($data['childHost'])) {
            $this->childHost = $data['childHost'];
        }
        if (isset($data['parentHost'])) {
            $this->parentHost = $data['parentHost'];
        }
    }
}
