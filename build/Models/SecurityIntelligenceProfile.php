<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIntelligenceProfile
 */
class SecurityIntelligenceProfile
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A list of commonly-known aliases for the threat intelligence included in the intelligenceProfile.
     * @var string[]
     */
    public array $aliases = [];

    /** 
     * The country/region of origin for the given actor or threat associated with this intelligenceProfile.
     * @var SecurityIntelligenceProfileCountryOrRegionOfOrigin[]
     */
    public array $countriesOrRegionsOfOrigin = [];

    /**  */
    public ?SecurityFormattedContent $description = null;

    /** The date and time when this intelligenceProfile was first active. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $firstActiveDateTime = null;

    /**  */
    public ?SecurityIntelligenceProfileKind $kind = null;

    /**  */
    public ?SecurityFormattedContent $summary = null;

    /** 
     * Known targets related to this intelligenceProfile.
     * @var string[]
     */
    public array $targets = [];

    /** The title of this intelligenceProfile. */
    public ?string $title = null;

    /** 
     * Formatted information featuring a description of the distinctive tactics, techniques, and procedures (TTP) of the group, followed by a list of all known custom, commodity, and publicly available implants used by the group.
     * @var SecurityFormattedContent|\stdClass|null
     */
    public mixed $tradecraft = null;

    /** 
     * Includes an assemblage of high-fidelity network indicators of compromise.
     * @var SecurityIntelligenceProfileIndicator[]
     */
    public array $indicators = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['aliases'])) {
            $this->aliases = $data['aliases'];
        }
        if (isset($data['countriesOrRegionsOfOrigin'])) {
            $this->countriesOrRegionsOfOrigin = $data['countriesOrRegionsOfOrigin'];
        }
        if (isset($data['description'])) {
            $this->description = is_array($data['description']) ? new SecurityFormattedContent($data['description']) : $data['description'];
        }
        if (isset($data['firstActiveDateTime'])) {
            $this->firstActiveDateTime = is_string($data['firstActiveDateTime']) ? new \DateTimeImmutable($data['firstActiveDateTime']) : $data['firstActiveDateTime'];
        }
        if (isset($data['kind'])) {
            $this->kind = is_array($data['kind']) ? new SecurityIntelligenceProfileKind($data['kind']) : $data['kind'];
        }
        if (isset($data['summary'])) {
            $this->summary = is_array($data['summary']) ? new SecurityFormattedContent($data['summary']) : $data['summary'];
        }
        if (isset($data['targets'])) {
            $this->targets = $data['targets'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['tradecraft'])) {
            $this->tradecraft = is_array($data['tradecraft']) ? new SecurityFormattedContent($data['tradecraft']) : $data['tradecraft'];
        }
        if (isset($data['indicators'])) {
            $this->indicators = $data['indicators'];
        }
    }
}
