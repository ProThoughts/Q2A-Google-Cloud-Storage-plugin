<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to `ListLogEntries`.
 *
 * Generated from protobuf message <code>google.logging.v2.ListLogEntriesRequest</code>
 */
class ListLogEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. Use `resource_names` instead.  One or more project identifiers
     * or project numbers from which to retrieve log entries.  Example:
     * `"my-project-1A"`. If present, these project identifiers are converted to
     * resource name format and added to the list of resources in
     * `resource_names`.
     *
     * Generated from protobuf field <code>repeated string project_ids = 1;</code>
     */
    private $project_ids;
    /**
     * Required. Names of one or more parent resources from which to
     * retrieve log entries:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Projects listed in the `project_ids` field are added to this list.
     *
     * Generated from protobuf field <code>repeated string resource_names = 8;</code>
     */
    private $resource_names;
    /**
     * Optional. A filter that chooses which log entries to return.  See [Advanced
     * Logs Filters](/logging/docs/view/advanced_filters).  Only log entries that
     * match the filter are returned.  An empty filter matches all log entries in
     * the resources listed in `resource_names`. Referencing a parent resource
     * that is not listed in `resource_names` will cause the filter to return no
     * results.
     * The maximum length of the filter is 20000 characters.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Optional. How the results should be sorted.  Presently, the only permitted
     * values are `"timestamp asc"` (default) and `"timestamp desc"`. The first
     * option returns entries in order of increasing values of
     * `LogEntry.timestamp` (oldest first), and the second option returns entries
     * in order of decreasing timestamps (newest first).  Entries with equal
     * timestamps are returned in order of their `insert_id` values.
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     */
    private $order_by = '';
    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `next_page_token` in the
     * response indicates that more results might be available.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `page_token` must be the value of
     * `next_page_token` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct();
    }

    /**
     * Deprecated. Use `resource_names` instead.  One or more project identifiers
     * or project numbers from which to retrieve log entries.  Example:
     * `"my-project-1A"`. If present, these project identifiers are converted to
     * resource name format and added to the list of resources in
     * `resource_names`.
     *
     * Generated from protobuf field <code>repeated string project_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProjectIds()
    {
        return $this->project_ids;
    }

    /**
     * Deprecated. Use `resource_names` instead.  One or more project identifiers
     * or project numbers from which to retrieve log entries.  Example:
     * `"my-project-1A"`. If present, these project identifiers are converted to
     * resource name format and added to the list of resources in
     * `resource_names`.
     *
     * Generated from protobuf field <code>repeated string project_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProjectIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->project_ids = $arr;

        return $this;
    }

    /**
     * Required. Names of one or more parent resources from which to
     * retrieve log entries:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Projects listed in the `project_ids` field are added to this list.
     *
     * Generated from protobuf field <code>repeated string resource_names = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceNames()
    {
        return $this->resource_names;
    }

    /**
     * Required. Names of one or more parent resources from which to
     * retrieve log entries:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     * Projects listed in the `project_ids` field are added to this list.
     *
     * Generated from protobuf field <code>repeated string resource_names = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_names = $arr;

        return $this;
    }

    /**
     * Optional. A filter that chooses which log entries to return.  See [Advanced
     * Logs Filters](/logging/docs/view/advanced_filters).  Only log entries that
     * match the filter are returned.  An empty filter matches all log entries in
     * the resources listed in `resource_names`. Referencing a parent resource
     * that is not listed in `resource_names` will cause the filter to return no
     * results.
     * The maximum length of the filter is 20000 characters.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter that chooses which log entries to return.  See [Advanced
     * Logs Filters](/logging/docs/view/advanced_filters).  Only log entries that
     * match the filter are returned.  An empty filter matches all log entries in
     * the resources listed in `resource_names`. Referencing a parent resource
     * that is not listed in `resource_names` will cause the filter to return no
     * results.
     * The maximum length of the filter is 20000 characters.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. How the results should be sorted.  Presently, the only permitted
     * values are `"timestamp asc"` (default) and `"timestamp desc"`. The first
     * option returns entries in order of increasing values of
     * `LogEntry.timestamp` (oldest first), and the second option returns entries
     * in order of decreasing timestamps (newest first).  Entries with equal
     * timestamps are returned in order of their `insert_id` values.
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. How the results should be sorted.  Presently, the only permitted
     * values are `"timestamp asc"` (default) and `"timestamp desc"`. The first
     * option returns entries in order of increasing values of
     * `LogEntry.timestamp` (oldest first), and the second option returns entries
     * in order of decreasing timestamps (newest first).  Entries with equal
     * timestamps are returned in order of their `insert_id` values.
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `next_page_token` in the
     * response indicates that more results might be available.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `next_page_token` in the
     * response indicates that more results might be available.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `page_token` must be the value of
     * `next_page_token` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `page_token` must be the value of
     * `next_page_token` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

