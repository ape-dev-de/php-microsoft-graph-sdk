<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookFilter;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\WorkbookFilterQueryOptions;

/**
 * Request builder for WorkbookFilter
 */
class FilterRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param WorkbookFilterQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return WorkbookFilter
     */
    public function get(?WorkbookFilterQueryOptions $options = null, ?array $queryParameters = null): WorkbookFilter
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, WorkbookFilter::class);
    }

    /**
     * Create a new WorkbookFilter
     *
     * @param WorkbookFilter $item The item to create
     * @return WorkbookFilter
     */
    public function post(WorkbookFilter $item): WorkbookFilter
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, WorkbookFilter::class);
    }
    /**
     * Get apply request builder
     *
     * @return ApplyRequestBuilder
     */
    public function apply(): ApplyRequestBuilder
    {
        return new ApplyRequestBuilder($this->client, $this->buildPath('apply'));
    }

    /**
     * Get applyBottomItemsFilter request builder
     *
     * @return ApplyBottomItemsFilterRequestBuilder
     */
    public function applyBottomItemsFilter(): ApplyBottomItemsFilterRequestBuilder
    {
        return new ApplyBottomItemsFilterRequestBuilder($this->client, $this->buildPath('applyBottomItemsFilter'));
    }

    /**
     * Get applyBottomPercentFilter request builder
     *
     * @return ApplyBottomPercentFilterRequestBuilder
     */
    public function applyBottomPercentFilter(): ApplyBottomPercentFilterRequestBuilder
    {
        return new ApplyBottomPercentFilterRequestBuilder($this->client, $this->buildPath('applyBottomPercentFilter'));
    }

    /**
     * Get applyCellColorFilter request builder
     *
     * @return ApplyCellColorFilterRequestBuilder
     */
    public function applyCellColorFilter(): ApplyCellColorFilterRequestBuilder
    {
        return new ApplyCellColorFilterRequestBuilder($this->client, $this->buildPath('applyCellColorFilter'));
    }

    /**
     * Get applyCustomFilter request builder
     *
     * @return ApplyCustomFilterRequestBuilder
     */
    public function applyCustomFilter(): ApplyCustomFilterRequestBuilder
    {
        return new ApplyCustomFilterRequestBuilder($this->client, $this->buildPath('applyCustomFilter'));
    }

    /**
     * Get applyDynamicFilter request builder
     *
     * @return ApplyDynamicFilterRequestBuilder
     */
    public function applyDynamicFilter(): ApplyDynamicFilterRequestBuilder
    {
        return new ApplyDynamicFilterRequestBuilder($this->client, $this->buildPath('applyDynamicFilter'));
    }

    /**
     * Get applyFontColorFilter request builder
     *
     * @return ApplyFontColorFilterRequestBuilder
     */
    public function applyFontColorFilter(): ApplyFontColorFilterRequestBuilder
    {
        return new ApplyFontColorFilterRequestBuilder($this->client, $this->buildPath('applyFontColorFilter'));
    }

    /**
     * Get applyIconFilter request builder
     *
     * @return ApplyIconFilterRequestBuilder
     */
    public function applyIconFilter(): ApplyIconFilterRequestBuilder
    {
        return new ApplyIconFilterRequestBuilder($this->client, $this->buildPath('applyIconFilter'));
    }

    /**
     * Get applyTopItemsFilter request builder
     *
     * @return ApplyTopItemsFilterRequestBuilder
     */
    public function applyTopItemsFilter(): ApplyTopItemsFilterRequestBuilder
    {
        return new ApplyTopItemsFilterRequestBuilder($this->client, $this->buildPath('applyTopItemsFilter'));
    }

    /**
     * Get applyTopPercentFilter request builder
     *
     * @return ApplyTopPercentFilterRequestBuilder
     */
    public function applyTopPercentFilter(): ApplyTopPercentFilterRequestBuilder
    {
        return new ApplyTopPercentFilterRequestBuilder($this->client, $this->buildPath('applyTopPercentFilter'));
    }

    /**
     * Get applyValuesFilter request builder
     *
     * @return ApplyValuesFilterRequestBuilder
     */
    public function applyValuesFilter(): ApplyValuesFilterRequestBuilder
    {
        return new ApplyValuesFilterRequestBuilder($this->client, $this->buildPath('applyValuesFilter'));
    }

    /**
     * Get clear request builder
     *
     * @return ClearRequestBuilder
     */
    public function clear(): ClearRequestBuilder
    {
        return new ClearRequestBuilder($this->client, $this->buildPath('clear'));
    }

}
