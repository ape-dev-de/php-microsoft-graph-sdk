<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Workbook
 */
class Workbook
{
    /**
     */
    private ?string $application;

    /**
     * Represents a collection of comments in a workbook.
     */
    private array $comments = [];

    /**
     */
    private ?string $functions;

    /**
     * Represents a collection of workbooks scoped named items (named ranges and constants). Read-only.
     */
    private array $names = [];

    /**
     * The status of workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only.
     */
    private array $operations = [];

    /**
     * Represents a collection of tables associated with the workbook. Read-only.
     */
    private array $tables = [];

    /**
     * Represents a collection of worksheets associated with the workbook. Read-only.
     * @var string[]
     */
    private array $worksheets = [];


    public function getApplication(): ?string
    {
        return $this->application;
    }

    public function setApplication(?string $application): self
    {
        $this->application = $application;
        return $this;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(array $comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    public function getFunctions(): ?string
    {
        return $this->functions;
    }

    public function setFunctions(?string $functions): self
    {
        $this->functions = $functions;
        return $this;
    }

    public function getNames(): array
    {
        return $this->names;
    }

    public function setNames(array $names): self
    {
        $this->names = $names;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getTables(): array
    {
        return $this->tables;
    }

    public function setTables(array $tables): self
    {
        $this->tables = $tables;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWorksheets(): array
    {
        return $this->worksheets;
    }

    /**
     * @param string[] $worksheets
     */
    public function setWorksheets(array $worksheets): self
    {
        $this->worksheets = $worksheets;
        return $this;
    }

}
