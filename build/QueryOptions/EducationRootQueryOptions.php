<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationRoot resources
 *
 * Available select fields:
 * - classes
 * - me
 * - reports
 * - schools
 * - users
 */
class EducationRootQueryOptions extends QueryOptions
{
    public const FIELD_CLASSES = 'classes';
    public const FIELD_ME = 'me';
    public const FIELD_REPORTS = 'reports';
    public const FIELD_SCHOOLS = 'schools';
    public const FIELD_USERS = 'users';

    /**
     * Select specific EducationRoot properties
     * 
     * @param array<string> $select Use EducationRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
