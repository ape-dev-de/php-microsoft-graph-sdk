<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflow
 */
class IdentityGovernanceWorkflow
{
    /**
     * When the workflow was deleted.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?\DateTimeInterface $deletedDateTime;

    /**
     * Identifier used for individually addressing a specific workflow.Supports $filter(eq, ne) and $orderby.
     */
    private ?string $id;

    /**
     * The date time when the workflow is expected to run next based on the schedule interval, if there are any users matching the execution conditions. Supports $filter(lt,gt) and $orderby.
     */
    private ?\DateTimeInterface $nextScheduleRunDateTime;

    /**
     * The current version number of the workflow. Value is 1 when the workflow is first created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?float $version;

    /**
     * The unique identifier of the Microsoft Entra identity that last modified the workflow object.
     */
    private array $executionScope = [];

    /**
     * Workflow runs.
     */
    private array $runs = [];

    /**
     * Represents the aggregation of task execution data for tasks within a workflow object.
     */
    private array $taskReports = [];

    /**
     * Per-user workflow execution results.
     */
    private array $userProcessingResults = [];

    /**
     * The workflow versions that are available.
     */
    private ?string $versions;

    public function getDeletedDateTime(): ?\DateTimeInterface
    {
        return $this->deletedDateTime;
    }

    public function setDeletedDateTime(?\DateTimeInterface $deletedDateTime): self
    {
        $this->deletedDateTime = $deletedDateTime;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNextScheduleRunDateTime(): ?\DateTimeInterface
    {
        return $this->nextScheduleRunDateTime;
    }

    public function setNextScheduleRunDateTime(?\DateTimeInterface $nextScheduleRunDateTime): self
    {
        $this->nextScheduleRunDateTime = $nextScheduleRunDateTime;
        return $this;
    }

    public function getVersion(): ?float
    {
        return $this->version;
    }

    public function setVersion(?float $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getExecutionScope(): array
    {
        return $this->executionScope;
    }

    public function setExecutionScope(array $executionScope): self
    {
        $this->executionScope = $executionScope;
        return $this;
    }

    public function getRuns(): array
    {
        return $this->runs;
    }

    public function setRuns(array $runs): self
    {
        $this->runs = $runs;
        return $this;
    }

    public function getTaskReports(): array
    {
        return $this->taskReports;
    }

    public function setTaskReports(array $taskReports): self
    {
        $this->taskReports = $taskReports;
        return $this;
    }

    public function getUserProcessingResults(): array
    {
        return $this->userProcessingResults;
    }

    public function setUserProcessingResults(array $userProcessingResults): self
    {
        $this->userProcessingResults = $userProcessingResults;
        return $this;
    }

    public function getVersions(): ?string
    {
        return $this->versions;
    }

    public function setVersions(?string $versions): self
    {
        $this->versions = $versions;
        return $this;
    }

}
