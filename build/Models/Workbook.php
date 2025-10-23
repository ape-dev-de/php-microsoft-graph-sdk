<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Workbook
 */
class Workbook
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var WorkbookApplication|\stdClass|null
     */
    public mixed $application = null;

    /** 
     * Represents a collection of comments in a workbook.
     * @var WorkbookComment[]
     */
    public array $comments = [];

    /** 
     * 
     * @var WorkbookFunctions|\stdClass|null
     */
    public mixed $functions = null;

    /** 
     * Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
     * @var WorkbookNamedItem[]
     */
    public array $names = [];

    /** 
     * The status of workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only.
     * @var WorkbookOperation[]
     */
    public array $operations = [];

    /** 
     * Represents a collection of tables associated with the workbook. Read-only.
     * @var WorkbookTable[]
     */
    public array $tables = [];

    /** 
     * Represents a collection of worksheets associated with the workbook. Read-only.
     * @var WorkbookWorksheet[]
     */
    public array $worksheets = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new WorkbookApplication($data['application']) : $data['application'];
        }
        if (isset($data['comments'])) {
            $this->comments = $data['comments'];
        }
        if (isset($data['functions'])) {
            $this->functions = is_array($data['functions']) ? new WorkbookFunctions($data['functions']) : $data['functions'];
        }
        if (isset($data['names'])) {
            $this->names = $data['names'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['tables'])) {
            $this->tables = $data['tables'];
        }
        if (isset($data['worksheets'])) {
            $this->worksheets = $data['worksheets'];
        }
    }
}
