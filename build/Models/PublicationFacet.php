<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicationFacet
 */
class PublicationFacet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The user who checked out the file.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $checkedOutBy = null;

    /** The state of publication for this document. Either published or checkout. Read-only. */
    public ?string $level = null;

    /** The unique identifier for the version that is visible to the current caller. Read-only. */
    public ?string $versionId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['checkedOutBy'])) {
            $this->checkedOutBy = is_array($data['checkedOutBy']) ? new IdentitySet($data['checkedOutBy']) : $data['checkedOutBy'];
        }
        if (isset($data['level'])) {
            $this->level = $data['level'];
        }
        if (isset($data['versionId'])) {
            $this->versionId = $data['versionId'];
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
