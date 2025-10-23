<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSchool
 */
class EducationSchool
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
     * Address of the school.
     * @var PhysicalAddress|\stdClass|null
     */
    public mixed $address = null;

    /** 
     * Entity who created the school.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** ID of school in syncing system. */
    public ?string $externalId = null;

    /** ID of principal in syncing system. */
    public ?string $externalPrincipalId = null;

    /**  */
    public ?string $fax = null;

    /** Highest grade taught. */
    public ?string $highestGrade = null;

    /** Lowest grade taught. */
    public ?string $lowestGrade = null;

    /** Phone number of school. */
    public ?string $phone = null;

    /** Email address of the principal. */
    public ?string $principalEmail = null;

    /** Name of the principal. */
    public ?string $principalName = null;

    /** School Number. */
    public ?string $schoolNumber = null;

    /** 
     * The underlying administrativeUnit for this school.
     * @var AdministrativeUnit|\stdClass|null
     */
    public mixed $administrativeUnit = null;

    /** 
     * Classes taught at the school. Nullable.
     * @var EducationClass[]
     */
    public array $classes = [];

    /** 
     * Users in the school. Nullable.
     * @var EducationUser[]
     */
    public array $users = [];


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
            $this->externalSource = $data['externalSource'];
        }
        if (isset($data['externalSourceDetail'])) {
            $this->externalSourceDetail = $data['externalSourceDetail'];
        }
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['externalPrincipalId'])) {
            $this->externalPrincipalId = $data['externalPrincipalId'];
        }
        if (isset($data['fax'])) {
            $this->fax = $data['fax'];
        }
        if (isset($data['highestGrade'])) {
            $this->highestGrade = $data['highestGrade'];
        }
        if (isset($data['lowestGrade'])) {
            $this->lowestGrade = $data['lowestGrade'];
        }
        if (isset($data['phone'])) {
            $this->phone = $data['phone'];
        }
        if (isset($data['principalEmail'])) {
            $this->principalEmail = $data['principalEmail'];
        }
        if (isset($data['principalName'])) {
            $this->principalName = $data['principalName'];
        }
        if (isset($data['schoolNumber'])) {
            $this->schoolNumber = $data['schoolNumber'];
        }
        if (isset($data['administrativeUnit'])) {
            $this->administrativeUnit = $data['administrativeUnit'];
        }
        if (isset($data['classes'])) {
            $this->classes = $data['classes'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
        }
    }
}
