<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookNamedItem
 */
class WorkbookNamedItem
{
    public function __construct(
        /** The comment associated with this name. */
        public ?string $comment = null,
        /** The name of the object. Read-only. */
        public ?string $name = null,
        /** Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only. */
        public ?string $scope = null,
        /** The type of reference is associated with the name. Possible values are: String, Integer, Double, Boolean, Range. Read-only. */
        public ?string $type = null,
        /** The formula that the name is defined to refer to. For example, =Sheet14!$B$2:$H$12 and =4.75. Read-only. */
        public ?string $value = null,
        /** Indicates whether the object is visible. */
        public ?bool $visible = null,
        /** Returns the worksheet to which the named item is scoped. Available only if the item is scoped to the worksheet. Read-only. */
        public ?string $worksheet = null
    ) {}
}
