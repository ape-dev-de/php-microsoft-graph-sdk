<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityFilePlanDescriptor
 */
class SecurityFilePlanDescriptor
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the file plan descriptor of type authority applied to a particular retention label.
     * @var SecurityFilePlanAuthority|\stdClass|null
     */
    public SecurityFilePlanAuthority|\stdClass|null $authority = null;

    /** 
     * 
     * @var SecurityFilePlanAppliedCategory|\stdClass|null
     */
    public SecurityFilePlanAppliedCategory|\stdClass|null $category = null;

    /** 
     * Represents the file plan descriptor of type citation applied to a particular retention label.
     * @var SecurityFilePlanCitation|\stdClass|null
     */
    public SecurityFilePlanCitation|\stdClass|null $citation = null;

    /** 
     * Represents the file plan descriptor of type department applied to a particular retention label.
     * @var SecurityFilePlanDepartment|\stdClass|null
     */
    public SecurityFilePlanDepartment|\stdClass|null $department = null;

    /** 
     * Represents the file plan descriptor of type filePlanReference applied to a particular retention label.
     * @var SecurityFilePlanReference|\stdClass|null
     */
    public SecurityFilePlanReference|\stdClass|null $filePlanReference = null;

    /** 
     * Specifies the underlying authority that describes the type of content to be retained and its retention schedule.
     * @var SecurityAuthorityTemplate|\stdClass|null
     */
    public SecurityAuthorityTemplate|\stdClass|null $authorityTemplate = null;

    /** 
     * Specifies a group of similar types of content in a particular department.
     * @var SecurityCategoryTemplate|\stdClass|null
     */
    public SecurityCategoryTemplate|\stdClass|null $categoryTemplate = null;

    /** 
     * The specific rule or regulation created by a jurisdiction used to determine whether certain labels and content should be retained or deleted.
     * @var SecurityCitationTemplate|\stdClass|null
     */
    public SecurityCitationTemplate|\stdClass|null $citationTemplate = null;

    /** 
     * Specifies the  department or business unit of an organization to which a label belongs.
     * @var SecurityDepartmentTemplate|\stdClass|null
     */
    public SecurityDepartmentTemplate|\stdClass|null $departmentTemplate = null;

    /** 
     * Specifies a unique alpha-numeric identifier for an organization’s retention schedule.
     * @var SecurityFilePlanReferenceTemplate|\stdClass|null
     */
    public SecurityFilePlanReferenceTemplate|\stdClass|null $filePlanReferenceTemplate = null;


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
        if (isset($data['authority'])) {
            $this->authority = is_array($data['authority']) ? new SecurityFilePlanAuthority($data['authority']) : $data['authority'];
        }
        if (isset($data['category'])) {
            $this->category = is_array($data['category']) ? new SecurityFilePlanAppliedCategory($data['category']) : $data['category'];
        }
        if (isset($data['citation'])) {
            $this->citation = is_array($data['citation']) ? new SecurityFilePlanCitation($data['citation']) : $data['citation'];
        }
        if (isset($data['department'])) {
            $this->department = is_array($data['department']) ? new SecurityFilePlanDepartment($data['department']) : $data['department'];
        }
        if (isset($data['filePlanReference'])) {
            $this->filePlanReference = is_array($data['filePlanReference']) ? new SecurityFilePlanReference($data['filePlanReference']) : $data['filePlanReference'];
        }
        if (isset($data['authorityTemplate'])) {
            $this->authorityTemplate = is_array($data['authorityTemplate']) ? new SecurityAuthorityTemplate($data['authorityTemplate']) : $data['authorityTemplate'];
        }
        if (isset($data['categoryTemplate'])) {
            $this->categoryTemplate = is_array($data['categoryTemplate']) ? new SecurityCategoryTemplate($data['categoryTemplate']) : $data['categoryTemplate'];
        }
        if (isset($data['citationTemplate'])) {
            $this->citationTemplate = is_array($data['citationTemplate']) ? new SecurityCitationTemplate($data['citationTemplate']) : $data['citationTemplate'];
        }
        if (isset($data['departmentTemplate'])) {
            $this->departmentTemplate = is_array($data['departmentTemplate']) ? new SecurityDepartmentTemplate($data['departmentTemplate']) : $data['departmentTemplate'];
        }
        if (isset($data['filePlanReferenceTemplate'])) {
            $this->filePlanReferenceTemplate = is_array($data['filePlanReferenceTemplate']) ? new SecurityFilePlanReferenceTemplate($data['filePlanReferenceTemplate']) : $data['filePlanReferenceTemplate'];
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
