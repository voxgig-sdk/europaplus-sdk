import { EuropaplusEntityBase } from '../EuropaplusEntityBase';
import type { EuropaplusSDK } from '../EuropaplusSDK';
import type { Control } from '../types';
import type { Schedule, ScheduleListMatch } from '../EuropaplusTypes';
declare class ScheduleEntity extends EuropaplusEntityBase<Schedule> {
    constructor(client: EuropaplusSDK, entopts: any);
    make(this: ScheduleEntity): ScheduleEntity;
    list(this: any, reqmatch?: ScheduleListMatch, ctrl?: Control): Promise<ScheduleEntity[]>;
}
export { ScheduleEntity };
