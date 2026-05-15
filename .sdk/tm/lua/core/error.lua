-- Europaplus SDK error

local EuropaplusError = {}
EuropaplusError.__index = EuropaplusError


function EuropaplusError.new(code, msg, ctx)
  local self = setmetatable({}, EuropaplusError)
  self.is_sdk_error = true
  self.sdk = "Europaplus"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function EuropaplusError:error()
  return self.msg
end


function EuropaplusError:__tostring()
  return self.msg
end


return EuropaplusError
