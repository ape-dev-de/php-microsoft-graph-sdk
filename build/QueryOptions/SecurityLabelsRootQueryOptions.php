<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityLabelsRoot resources
 *
 * Available select fields:
 * - authorities
 * - categories
 * - citations
 * - departments
 * - filePlanReferences
 * - retentionLabels
 */
class SecurityLabelsRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityLabelsRoot
     */
    public const FIELD_AUTHORITIES = 'authorities';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_CITATIONS = 'citations';
    public const FIELD_DEPARTMENTS = 'departments';
    public const FIELD_FILE_PLAN_REFERENCES = 'filePlanReferences';
    public const FIELD_RETENTION_LABELS = 'retentionLabels';

    /**
     * Select specific SecurityLabelsRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
