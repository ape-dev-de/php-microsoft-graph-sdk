<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJob
 */
class PrintJob
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The dateTimeOffset when the job was acknowledged. Read-only. */
        public ?\DateTimeInterface $acknowledgedDateTime = null,
        /**  */
        public ?string $configuration = null,
        /**  */
        public ?string $createdBy = null,
        /** The DateTimeOffset when the job was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The error code of the print job. Read-only. */
        public ?float $errorCode = null,
        /** If true, document can be fetched by printer. */
        public ?bool $isFetchable = null,
        /** Contains the source job URL, if the job has been redirected from another printer. */
        public ?string $redirectedFrom = null,
        /** Contains the destination job URL, if the job has been redirected to another printer. */
        public ?string $redirectedTo = null,
        /**  */
        public ?string $status = null,
        /**  */
        public array $documents = [],
        /** A list of printTasks that were triggered by this print job. */
        public array $tasks = []
    ) {}
}
