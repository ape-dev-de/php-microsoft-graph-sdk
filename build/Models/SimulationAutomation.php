<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomation
 */
class SimulationAutomation
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity of the user who created the attack simulation automation.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $createdBy = null;

    /** Date and time when the attack simulation automation was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description of the attack simulation automation. */
    public ?string $description = null;

    /** Display name of the attack simulation automation. Supports $filter and $orderby. */
    public ?string $displayName = null;

    /** 
     * Identity of the user who most recently modified the attack simulation automation.
     * @var EmailIdentity|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** Date and time when the attack simulation automation was most recently modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Date and time of the latest run of the attack simulation automation. */
    public ?\DateTimeInterface $lastRunDateTime = null;

    /** Date and time of the upcoming run of the attack simulation automation. */
    public ?\DateTimeInterface $nextRunDateTime = null;

    /** 
     * Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
     * @var SimulationAutomationStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * A collection of simulation automation runs.
     * @var SimulationAutomationRun[]
     */
    public array $runs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['lastRunDateTime'])) {
            $this->lastRunDateTime = $data['lastRunDateTime'];
        }
        if (isset($data['nextRunDateTime'])) {
            $this->nextRunDateTime = $data['nextRunDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['runs'])) {
            $this->runs = $data['runs'];
        }
    }
}
