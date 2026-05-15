<?php
declare(strict_types=1);

// Europaplus SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

EuropaplusUtility::setRegistrar(function (EuropaplusUtility $u): void {
    $u->clean = [EuropaplusClean::class, 'call'];
    $u->done = [EuropaplusDone::class, 'call'];
    $u->make_error = [EuropaplusMakeError::class, 'call'];
    $u->feature_add = [EuropaplusFeatureAdd::class, 'call'];
    $u->feature_hook = [EuropaplusFeatureHook::class, 'call'];
    $u->feature_init = [EuropaplusFeatureInit::class, 'call'];
    $u->fetcher = [EuropaplusFetcher::class, 'call'];
    $u->make_fetch_def = [EuropaplusMakeFetchDef::class, 'call'];
    $u->make_context = [EuropaplusMakeContext::class, 'call'];
    $u->make_options = [EuropaplusMakeOptions::class, 'call'];
    $u->make_request = [EuropaplusMakeRequest::class, 'call'];
    $u->make_response = [EuropaplusMakeResponse::class, 'call'];
    $u->make_result = [EuropaplusMakeResult::class, 'call'];
    $u->make_point = [EuropaplusMakePoint::class, 'call'];
    $u->make_spec = [EuropaplusMakeSpec::class, 'call'];
    $u->make_url = [EuropaplusMakeUrl::class, 'call'];
    $u->param = [EuropaplusParam::class, 'call'];
    $u->prepare_auth = [EuropaplusPrepareAuth::class, 'call'];
    $u->prepare_body = [EuropaplusPrepareBody::class, 'call'];
    $u->prepare_headers = [EuropaplusPrepareHeaders::class, 'call'];
    $u->prepare_method = [EuropaplusPrepareMethod::class, 'call'];
    $u->prepare_params = [EuropaplusPrepareParams::class, 'call'];
    $u->prepare_path = [EuropaplusPreparePath::class, 'call'];
    $u->prepare_query = [EuropaplusPrepareQuery::class, 'call'];
    $u->result_basic = [EuropaplusResultBasic::class, 'call'];
    $u->result_body = [EuropaplusResultBody::class, 'call'];
    $u->result_headers = [EuropaplusResultHeaders::class, 'call'];
    $u->transform_request = [EuropaplusTransformRequest::class, 'call'];
    $u->transform_response = [EuropaplusTransformResponse::class, 'call'];
});
