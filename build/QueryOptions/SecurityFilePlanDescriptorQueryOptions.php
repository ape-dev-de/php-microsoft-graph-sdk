<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanDescriptor resources
 *
 * Available select fields:
 * - authority
 * - category
 * - citation
 * - department
 * - filePlanReference
 * - authorityTemplate
 * - categoryTemplate
 * - citationTemplate
 * - departmentTemplate
 * - filePlanReferenceTemplate
 */
class SecurityFilePlanDescriptorQueryOptions extends QueryOptions
{
    public const FIELD_AUTHORITY = 'authority';
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CITATION = 'citation';
    public const FIELD_DEPARTMENT = 'department';
    public const FIELD_FILE_PLAN_REFERENCE = 'filePlanReference';
    public const FIELD_AUTHORITY_TEMPLATE = 'authorityTemplate';
    public const FIELD_CATEGORY_TEMPLATE = 'categoryTemplate';
    public const FIELD_CITATION_TEMPLATE = 'citationTemplate';
    public const FIELD_DEPARTMENT_TEMPLATE = 'departmentTemplate';
    public const FIELD_FILE_PLAN_REFERENCE_TEMPLATE = 'filePlanReferenceTemplate';

    /**
     * Select specific SecurityFilePlanDescriptor properties
     * 
     * @param array<string> $select Use SecurityFilePlanDescriptorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
