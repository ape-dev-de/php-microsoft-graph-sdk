<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Workbook
 */
class Workbook
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $application = null,
        /** Represents a collection of comments in a workbook. */
        public array $comments = [],
        /**  */
        public ?string $functions = null,
        /** Represents a collection of workbooks scoped named items (named ranges and constants). Read-only. */
        public array $names = [],
        /** The status of workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. */
        public array $operations = [],
        /** Represents a collection of tables associated with the workbook. Read-only. */
        public array $tables = [],
        /** Represents a collection of worksheets associated with the workbook. Read-only. */
        public array $worksheets = []
    ) {}
}
