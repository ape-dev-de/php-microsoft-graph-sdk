<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementFile
 */
class AgreementFile
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date time representing when the file was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Localized display name of the policy file of an agreement. The localized display name is shown to end users who view the agreement. */
    public ?string $displayName = null;

    /** 
     * Data that represents the terms of use PDF document. Read-only.
     * @var AgreementFileData|\stdClass|null
     */
    public mixed $fileData = null;

    /** Name of the agreement file (for example, TOU.pdf). Read-only. */
    public ?string $fileName = null;

    /** If none of the languages matches the client preference, indicates whether this is the default agreement file. If none of the files are marked as default, the first one is treated as the default. Read-only. */
    public ?bool $isDefault = null;

    /** Indicates whether the agreement file is a major version update. Major version updates invalidate the agreement's acceptances on the corresponding language. */
    public ?bool $isMajorVersion = null;

    /** The language of the agreement file in the format 'languagecode2-country/regioncode2'. 'languagecode2' is a lowercase two-letter code derived from ISO 639-1, while 'country/regioncode2' is derived from ISO 3166 and usually consists of two uppercase letters, or a BCP-47 language tag. For example, U.S. English is en-US. Read-only. */
    public ?string $language = null;

    /** 
     * The localized version of the terms of use agreement files attached to the agreement.
     * @var AgreementFileLocalization[]
     */
    public array $localizations = [];


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['fileData'])) {
            $this->fileData = is_array($data['fileData']) ? new AgreementFileData($data['fileData']) : $data['fileData'];
        }
        if (isset($data['fileName'])) {
            $this->fileName = $data['fileName'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = $data['isDefault'];
        }
        if (isset($data['isMajorVersion'])) {
            $this->isMajorVersion = $data['isMajorVersion'];
        }
        if (isset($data['language'])) {
            $this->language = $data['language'];
        }
        if (isset($data['localizations'])) {
            $this->localizations = $data['localizations'];
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
