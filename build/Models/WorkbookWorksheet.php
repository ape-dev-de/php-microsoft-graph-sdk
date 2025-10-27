<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheet
 */
class WorkbookWorksheet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the worksheet. */
    public ?string $name = null;

    /** The zero-based position of the worksheet within the workbook. */
    public ?float $position = null;

    /** The visibility of the worksheet. The possible values are: Visible, Hidden, VeryHidden. */
    public ?string $visibility = null;

    /** 
     * The list of charts that are part of the worksheet. Read-only.
     * @var WorkbookChart[]
     */
    public array $charts = [];

    /** 
     * The list of names that are associated with the worksheet. Read-only.
     * @var WorkbookNamedItem[]
     */
    public array $names = [];

    /** 
     * The list of piot tables that are part of the worksheet.
     * @var WorkbookPivotTable[]
     */
    public array $pivotTables = [];

    /** 
     * The sheet protection object for a worksheet. Read-only.
     * @var WorkbookWorksheetProtection|\stdClass|null
     */
    public WorkbookWorksheetProtection|\stdClass|null $protection = null;

    /** 
     * The list of tables that are part of the worksheet. Read-only.
     * @var WorkbookTable[]
     */
    public array $tables = [];


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
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['position'])) {
            $this->position = is_numeric($data['position']) ? (float)$data['position'] : $data['position'];
        }
        if (isset($data['visibility'])) {
            $this->visibility = $data['visibility'];
        }
        if (isset($data['charts'])) {
            $this->charts = $data['charts'];
        }
        if (isset($data['names'])) {
            $this->names = $data['names'];
        }
        if (isset($data['pivotTables'])) {
            $this->pivotTables = $data['pivotTables'];
        }
        if (isset($data['protection'])) {
            $this->protection = is_array($data['protection']) ? new WorkbookWorksheetProtection($data['protection']) : $data['protection'];
        }
        if (isset($data['tables'])) {
            $this->tables = $data['tables'];
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
