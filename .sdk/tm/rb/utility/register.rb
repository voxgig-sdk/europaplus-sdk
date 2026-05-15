# Europaplus SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

EuropaplusUtility.registrar = ->(u) {
  u.clean = EuropaplusUtilities::Clean
  u.done = EuropaplusUtilities::Done
  u.make_error = EuropaplusUtilities::MakeError
  u.feature_add = EuropaplusUtilities::FeatureAdd
  u.feature_hook = EuropaplusUtilities::FeatureHook
  u.feature_init = EuropaplusUtilities::FeatureInit
  u.fetcher = EuropaplusUtilities::Fetcher
  u.make_fetch_def = EuropaplusUtilities::MakeFetchDef
  u.make_context = EuropaplusUtilities::MakeContext
  u.make_options = EuropaplusUtilities::MakeOptions
  u.make_request = EuropaplusUtilities::MakeRequest
  u.make_response = EuropaplusUtilities::MakeResponse
  u.make_result = EuropaplusUtilities::MakeResult
  u.make_point = EuropaplusUtilities::MakePoint
  u.make_spec = EuropaplusUtilities::MakeSpec
  u.make_url = EuropaplusUtilities::MakeUrl
  u.param = EuropaplusUtilities::Param
  u.prepare_auth = EuropaplusUtilities::PrepareAuth
  u.prepare_body = EuropaplusUtilities::PrepareBody
  u.prepare_headers = EuropaplusUtilities::PrepareHeaders
  u.prepare_method = EuropaplusUtilities::PrepareMethod
  u.prepare_params = EuropaplusUtilities::PrepareParams
  u.prepare_path = EuropaplusUtilities::PreparePath
  u.prepare_query = EuropaplusUtilities::PrepareQuery
  u.result_basic = EuropaplusUtilities::ResultBasic
  u.result_body = EuropaplusUtilities::ResultBody
  u.result_headers = EuropaplusUtilities::ResultHeaders
  u.transform_request = EuropaplusUtilities::TransformRequest
  u.transform_response = EuropaplusUtilities::TransformResponse
}
