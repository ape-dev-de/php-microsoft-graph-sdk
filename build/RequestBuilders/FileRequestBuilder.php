<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\AgreementFile;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AgreementFileQueryOptions;

/**
 * Request builder for AgreementFile
 */
class FileRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param AgreementFileQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return AgreementFile
     */
    public function get(?AgreementFileQueryOptions $options = null, ?array $queryParameters = null): AgreementFile
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, AgreementFile::class);
    }

    /**
     * Create a new AgreementFile
     *
     * @param AgreementFile $item The item to create
     * @return AgreementFile
     */
    public function post(AgreementFile $item): AgreementFile
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, AgreementFile::class);
    }
    /**
     * Get localizations request builder
     *
     * @return LocalizationsRequestBuilder
     */
    public function localizations(): LocalizationsRequestBuilder
    {
        return new LocalizationsRequestBuilder($this->client, $this->buildPath('localizations'));
    }

}
