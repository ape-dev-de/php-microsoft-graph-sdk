<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationOrganization
 */
class EducationOrganization
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Organization description. */
    public ?string $description = null;

    /** Organization display name. */
    public ?string $displayName = null;

    /** 
     * Source where this organization was created from. Possible values are: sis, manual.
     * @var EducationExternalSource|\stdClass|null
     */
    public mixed $externalSource = null;

    /** The name of the external source this resource was generated from. */
    public ?string $externalSourceDetail = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['externalSource'])) {
            $this->externalSource = is_array($data['externalSource']) ? new EducationExternalSource($data['externalSource']) : $data['externalSource'];
        }
        if (isset($data['externalSourceDetail'])) {
            $this->externalSourceDetail = $data['externalSourceDetail'];
        }
    }
}
