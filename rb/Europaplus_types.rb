# frozen_string_literal: true

# Typed models for the Europaplus SDK.
#
# GENERATED from the API model: main.kit.entity.<e>.fields[] and per-op
# params (op.<name>.points[].args.params[]). Member types come from the
# canonical type sentinels via @voxgig/sdkgen canonToType (source of truth:
# @voxgig/apidef VALID_CANON). Ruby types are unenforced; these YARD
# annotations document the shapes. Do not edit by hand.

# Schedule entity data model.
#
# @!attribute [rw] description
#   @return [String, nil]
#
# @!attribute [rw] host
#   @return [String, nil]
#
# @!attribute [rw] program
#   @return [String, nil]
#
# @!attribute [rw] time
#   @return [String, nil]
Schedule = Struct.new(
  :description,
  :host,
  :program,
  :time,
  keyword_init: true
)

# Match filter for Schedule#list (any subset of Schedule fields).
#
# @!attribute [rw] description
#   @return [String, nil]
#
# @!attribute [rw] host
#   @return [String, nil]
#
# @!attribute [rw] program
#   @return [String, nil]
#
# @!attribute [rw] time
#   @return [String, nil]
ScheduleListMatch = Struct.new(
  :description,
  :host,
  :program,
  :time,
  keyword_init: true
)

