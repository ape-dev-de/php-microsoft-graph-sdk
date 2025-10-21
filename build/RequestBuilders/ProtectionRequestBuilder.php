<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookWorksheetProtection;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookWorksheetProtectionQueryOptions;

/**
 * Request builder for WorkbookWorksheetProtection
 */
class ProtectionRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookWorksheetProtectionQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookWorksheetProtection
     */
    public function get(?WorkbookWorksheetProtectionQueryOptions $options = null, ?array $queryParameters = null): WorkbookWorksheetProtection
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookWorksheetProtection::class);
    }

    /**
     * Create a new WorkbookWorksheetProtection
     *
     * @param WorkbookWorksheetProtection $item The item to create
     * @return WorkbookWorksheetProtection
     */
    public function post(WorkbookWorksheetProtection $item): WorkbookWorksheetProtection
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookWorksheetProtection::class);
    }
    /**
     * Get protect request builder
     *
     * @return ProtectRequestBuilder
     */
    public function protect(): ProtectRequestBuilder
    {
        return new ProtectRequestBuilder($this->client, $this->buildPath('protect'));
    }

    /**
     * Get unprotect request builder
     *
     * @return UnprotectRequestBuilder
     */
    public function unprotect(): UnprotectRequestBuilder
    {
        return new UnprotectRequestBuilder($this->client, $this->buildPath('unprotect'));
    }

}
