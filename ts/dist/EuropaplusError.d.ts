import { Context } from './Context';
declare class EuropaplusError extends Error {
    isEuropaplusError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { EuropaplusError };
