package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewScheduleEntityFunc func(client *EuropaplusSDK, entopts map[string]any) EuropaplusEntity

