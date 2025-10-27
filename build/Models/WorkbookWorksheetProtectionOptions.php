<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookWorksheetProtectionOptions
 */
class WorkbookWorksheetProtectionOptions
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the worksheet protection option to allow the use of the autofilter feature is enabled. */
    public ?bool $allowAutoFilter = null;

    /** Indicates whether the worksheet protection option to allow deleting columns is enabled. */
    public ?bool $allowDeleteColumns = null;

    /** Indicates whether the worksheet protection option to allow deleting rows is enabled. */
    public ?bool $allowDeleteRows = null;

    /** Indicates whether the worksheet protection option to allow formatting cells is enabled. */
    public ?bool $allowFormatCells = null;

    /** Indicates whether the worksheet protection option to allow formatting columns is enabled. */
    public ?bool $allowFormatColumns = null;

    /** Indicates whether the worksheet protection option to allow formatting rows is enabled. */
    public ?bool $allowFormatRows = null;

    /** Indicates whether the worksheet protection option to allow inserting columns is enabled. */
    public ?bool $allowInsertColumns = null;

    /** Indicates whether the worksheet protection option to allow inserting hyperlinks is enabled. */
    public ?bool $allowInsertHyperlinks = null;

    /** Indicates whether the worksheet protection option to allow inserting rows is enabled. */
    public ?bool $allowInsertRows = null;

    /** Indicates whether the worksheet protection option to allow the use of the pivot table feature is enabled. */
    public ?bool $allowPivotTables = null;

    /** Indicates whether the worksheet protection option to allow the use of the sort feature is enabled. */
    public ?bool $allowSort = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowAutoFilter'])) {
            $this->allowAutoFilter = $data['allowAutoFilter'];
        }
        if (isset($data['allowDeleteColumns'])) {
            $this->allowDeleteColumns = $data['allowDeleteColumns'];
        }
        if (isset($data['allowDeleteRows'])) {
            $this->allowDeleteRows = $data['allowDeleteRows'];
        }
        if (isset($data['allowFormatCells'])) {
            $this->allowFormatCells = $data['allowFormatCells'];
        }
        if (isset($data['allowFormatColumns'])) {
            $this->allowFormatColumns = $data['allowFormatColumns'];
        }
        if (isset($data['allowFormatRows'])) {
            $this->allowFormatRows = $data['allowFormatRows'];
        }
        if (isset($data['allowInsertColumns'])) {
            $this->allowInsertColumns = $data['allowInsertColumns'];
        }
        if (isset($data['allowInsertHyperlinks'])) {
            $this->allowInsertHyperlinks = $data['allowInsertHyperlinks'];
        }
        if (isset($data['allowInsertRows'])) {
            $this->allowInsertRows = $data['allowInsertRows'];
        }
        if (isset($data['allowPivotTables'])) {
            $this->allowPivotTables = $data['allowPivotTables'];
        }
        if (isset($data['allowSort'])) {
            $this->allowSort = $data['allowSort'];
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
