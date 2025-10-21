<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrinterShare resources
 *
 * Available select fields:
 * - allowAllUsers
 * - createdDateTime
 * - viewPoint
 * - allowedGroups
 * - allowedUsers
 * - printer
 */
class PrinterShareQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrinterShare
     */
    public const FIELD_ALLOW_ALL_USERS = 'allowAllUsers';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_VIEW_POINT = 'viewPoint';
    public const FIELD_ALLOWED_GROUPS = 'allowedGroups';
    public const FIELD_ALLOWED_USERS = 'allowedUsers';
    public const FIELD_PRINTER = 'printer';

    /**
     * Select specific PrinterShare properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
