package core

type EuropaplusError struct {
	IsEuropaplusError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewEuropaplusError(code string, msg string, ctx *Context) *EuropaplusError {
	return &EuropaplusError{
		IsEuropaplusError: true,
		Sdk:              "Europaplus",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *EuropaplusError) Error() string {
	return e.Msg
}
