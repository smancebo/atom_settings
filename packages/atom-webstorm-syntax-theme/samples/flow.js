class ExportC {
  x: string;
  y: number;
  constructor(x: string) { this.x = x; }
  foo(): string { return this.x; }
  bar(y: number): void { this.y = y; }
}

class ExportD extends ExportC {
  foo(): string { return super.foo() + "!"; }
  bar(y?: number): void { super.bar(y || 0); }

  static qux(): ExportD { return new ExportD("hello"); }
}

module.exports.C = ExportC;
module.exports.D = ExportD;
