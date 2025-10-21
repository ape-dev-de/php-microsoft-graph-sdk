<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomation
 */
class SimulationAutomation
{
    public function __construct(
        /** Identity of the user who created the attack simulation automation. */
        public ?string $createdBy = null,
        /** Date and time when the attack simulation automation was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Description of the attack simulation automation. */
        public ?string $description = null,
        /** Display name of the attack simulation automation. Supports $filter and $orderby. */
        public ?string $displayName = null,
        /** Identity of the user who most recently modified the attack simulation automation. */
        public ?string $lastModifiedBy = null,
        /** Date and time when the attack simulation automation was most recently modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Date and time of the latest run of the attack simulation automation. */
        public ?\DateTimeInterface $lastRunDateTime = null,
        /** Date and time of the upcoming run of the attack simulation automation. */
        public ?\DateTimeInterface $nextRunDateTime = null,
        /** Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue. */
        public ?string $status = null,
        /** @var string[] A collection of simulation automation runs. */
        public array $runs = []
    ) {}
}
