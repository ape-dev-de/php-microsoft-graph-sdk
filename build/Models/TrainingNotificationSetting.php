<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TrainingNotificationSetting
 */
class TrainingNotificationSetting
{
    /**
     * Training assignment details.
     */
    private ?string $trainingAssignment;

    /**
     * Training reminder details.
     */
    private ?string $trainingReminder;

    public function getTrainingAssignment(): ?string
    {
        return $this->trainingAssignment;
    }

    public function setTrainingAssignment(?string $trainingAssignment): self
    {
        $this->trainingAssignment = $trainingAssignment;
        return $this;
    }

    public function getTrainingReminder(): ?string
    {
        return $this->trainingReminder;
    }

    public function setTrainingReminder(?string $trainingReminder): self
    {
        $this->trainingReminder = $trainingReminder;
        return $this;
    }

}
