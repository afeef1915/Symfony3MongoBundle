"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('angular2/core');
var common_1 = require('angular2/common');
var header_1 = require('../header/header');
var GridPage = (function () {
    function GridPage() {
    }
    GridPage = __decorate([
        core_1.Component({
            selector: 'grid',
            template: "\n    <wrapper>\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <h1 class=\"page-header\">Grid</h1>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3>Grid options</h3>\n              <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>\n              <div class=\"table-responsive\">\n                <table class=\"table table-bordered table-striped\">\n                  <thead>\n                  <tr>\n                    <th></th>\n                    <th>\n                      Extra small devices\n                      <small>Phones (&lt;768px)</small>\n                    </th>\n                    <th>\n                      Small devices\n                      <small>Tablets (&ge;768px)</small>\n                    </th>\n                    <th>\n                      Medium devices\n                      <small>Desktops (&ge;992px)</small>\n                    </th>\n                    <th>\n                      Large devices\n                      <small>Desktops (&ge;1200px)</small>\n                    </th>\n                  </tr>\n                  </thead>\n                  <tbody>\n                  <tr>\n                    <th>Grid behavior</th>\n                    <td>Horizontal at all times</td>\n                    <td colspan=\"3\">Collapsed to start, horizontal above breakpoints</td>\n                  </tr>\n                  <tr>\n                    <th>Max container width</th>\n                    <td>None (auto)</td>\n                    <td>750px</td>\n                    <td>970px</td>\n                    <td>1170px</td>\n                  </tr>\n                  <tr>\n                    <th>Class prefix</th>\n                    <td>\n                      <code>.col-xs-</code>\n                    </td>\n                    <td>\n                      <code>.col-sm-</code>\n                    </td>\n                    <td>\n                      <code>.col-md-</code>\n                    </td>\n                    <td>\n                      <code>.col-lg-</code>\n                    </td>\n                  </tr>\n                  <tr>\n                    <th># of columns</th>\n                    <td colspan=\"4\">12</td>\n                  </tr>\n                  <tr>\n                    <th>Max column width</th>\n                    <td class=\"text-muted\">Auto</td>\n                    <td>60px</td>\n                    <td>78px</td>\n                    <td>95px</td>\n                  </tr>\n                  <tr>\n                    <th>Gutter width</th>\n                    <td colspan=\"4\">30px (15px on each side of a column)</td>\n                  </tr>\n                  <tr>\n                    <th>Nestable</th>\n                    <td colspan=\"4\">Yes</td>\n                  </tr>\n                  <tr>\n                    <th>Offsets</th>\n                    <td colspan=\"4\">Yes</td>\n                  </tr>\n                  <tr>\n                    <th>Column ordering</th>\n                    <td colspan=\"4\">Yes</td>\n                  </tr>\n                  </tbody>\n                </table>\n              </div>\n              <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any\n                <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a\n                <code>.col-lg-</code> class is not present.</p>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3>Example: Stacked-to-horizontal</h3>\n              <p>Using a single set of\n                <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any\n                <code>.row</code>.</p>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n                <div class=\"col-md-1\">.col-md-1</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-8\">.col-md-8</div>\n                <div class=\"col-md-4\">.col-md-4</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-4\">.col-md-4</div>\n                <div class=\"col-md-4\">.col-md-4</div>\n                <div class=\"col-md-4\">.col-md-4</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-6\">.col-md-6</div>\n                <div class=\"col-md-6\">.col-md-6</div>\n              </div>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3>Example: Mobile and desktop</h3>\n              <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding\n                <code>.col-xs-*</code>\n                <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>\n              <div class=\"row show-grid\">\n                <div class=\"col-xs-12 col-md-8\">.col-xs-12 .col-md-8</div>\n                <div class=\"col-xs-6 col-md-4\">.col-xs-6 .col-md-4</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-xs-6 col-md-4\">.col-xs-6 .col-md-4</div>\n                <div class=\"col-xs-6 col-md-4\">.col-xs-6 .col-md-4</div>\n                <div class=\"col-xs-6 col-md-4\">.col-xs-6 .col-md-4</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-xs-6\">.col-xs-6</div>\n                <div class=\"col-xs-6\">.col-xs-6</div>\n              </div>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3>Example: Mobile, tablet, desktops</h3>\n              <p>Build on the previous example by creating even more dynamic and powerful layouts with tablet\n                <code>.col-sm-*</code> classes.</p>\n              <div class=\"row show-grid\">\n                <div class=\"col-xs-12 col-sm-6 col-md-8\">.col-xs-12 .col-sm-6 .col-md-8</div>\n                <div class=\"col-xs-6 col-md-4\">.col-xs-6 .col-md-4</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-xs-6 col-sm-4\">.col-xs-6 .col-sm-4</div>\n                <div class=\"col-xs-6 col-sm-4\">.col-xs-6 .col-sm-4</div>\n                <!-- Optional: clear the XS cols if their content doesn't match in height -->\n                <div class=\"clearfix visible-xs\"></div>\n                <div class=\"col-xs-6 col-sm-4\">.col-xs-6 .col-sm-4</div>\n              </div>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3 id=\"grid-responsive-resets\">Responsive column resets</h3>\n              <p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a\n                <code>.clearfix</code> and our <a href=\"#responsive-utilities\">responsive utility classes</a>.</p>\n              <div class=\"row show-grid\">\n                <div class=\"col-xs-6 col-sm-3\">\n                  .col-xs-6 .col-sm-3\n                  <br>Resize your viewport or check it out on your phone for an example.\n                </div>\n                <div class=\"col-xs-6 col-sm-3\">.col-xs-6 .col-sm-3</div>\n\n                <!-- Add the extra clearfix for only the required viewport -->\n                <div class=\"clearfix visible-xs\"></div>\n\n                <div class=\"col-xs-6 col-sm-3\">.col-xs-6 .col-sm-3</div>\n                <div class=\"col-xs-6 col-sm-3\">.col-xs-6 .col-sm-3</div>\n              </div>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3 id=\"grid-offsetting\">Offsetting columns</h3>\n              <p>Move columns to the right using\n                <code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by\n                <code>*</code> columns. For example,\n                <code>.col-md-offset-4</code> moves\n                <code>.col-md-4</code> over four columns.</p>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-4\">.col-md-4</div>\n                <div class=\"col-md-4 col-md-offset-4\">.col-md-4 .col-md-offset-4</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-3 col-md-offset-3\">.col-md-3 .col-md-offset-3</div>\n                <div class=\"col-md-3 col-md-offset-3\">.col-md-3 .col-md-offset-3</div>\n              </div>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-6 col-md-offset-3\">.col-md-6 .col-md-offset-3</div>\n              </div>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3 id=\"grid-nesting\">Nesting columns</h3>\n              <p>To nest your content with the default grid, add a new\n                <code>.row</code> and set of\n                <code>.col-md-*</code> columns within an existing\n                <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-9\">\n                  Level 1: .col-md-9\n                  <div class=\"row show-grid\">\n                    <div class=\"col-md-6\">\n                      Level 2: .col-md-6\n                    </div>\n                    <div class=\"col-md-6\">\n                      Level 2: .col-md-6\n                    </div>\n                  </div>\n                </div>\n              </div>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n              <h3 id=\"grid-column-ordering\">Column ordering</h3>\n              <p>Easily change the order of our built-in grid columns with\n                <code>.col-md-push-*</code> and\n                <code>.col-md-pull-*</code> modifier classes.</p>\n              <div class=\"row show-grid\">\n                <div class=\"col-md-9 col-md-push-3\">.col-md-9 .col-md-push-3</div>\n                <div class=\"col-md-3 col-md-pull-9\">.col-md-3 .col-md-pull-9</div>\n              </div>\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n    </wrapper>\n  ",
            styles: ["\n\n  "],
            directives: [header_1.WrapperCmp, common_1.CORE_DIRECTIVES]
        }), 
        __metadata('design:paramtypes', [])
    ], GridPage);
    return GridPage;
}());
exports.GridPage = GridPage;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2dyaWQvZ3JpZC50cyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUEscUJBQXdCLGVBQWUsQ0FBQyxDQUFBO0FBQ3hDLHVCQUE4QixpQkFBaUIsQ0FBQyxDQUFBO0FBQ2hELHVCQUF5QixrQkFBa0IsQ0FBQyxDQUFBO0FBeVQ1QztJQUFBO0lBQ0EsQ0FBQztJQXhURDtRQUFDLGdCQUFTLENBQUM7WUFDVCxRQUFRLEVBQUUsTUFBTTtZQUNoQixRQUFRLEVBQUUsd3FaQStTVDtZQUNELE1BQU0sRUFBRSxDQUFDLFFBRVIsQ0FBQztZQUNGLFVBQVUsRUFBRSxDQUFDLG1CQUFVLEVBQUUsd0JBQWUsQ0FBQztTQUMxQyxDQUFDOztnQkFBQTtJQUVGLGVBQUM7QUFBRCxDQURBLEFBQ0MsSUFBQTtBQURZLGdCQUFRLFdBQ3BCLENBQUEiLCJmaWxlIjoiYXBwL2NvbXBvbmVudHMvZ3JpZC9ncmlkLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHtDb21wb25lbnR9IGZyb20gJ2FuZ3VsYXIyL2NvcmUnO1xyXG5pbXBvcnQge0NPUkVfRElSRUNUSVZFU30gZnJvbSAnYW5ndWxhcjIvY29tbW9uJztcclxuaW1wb3J0IHtXcmFwcGVyQ21wfSBmcm9tICcuLi9oZWFkZXIvaGVhZGVyJztcclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAnZ3JpZCcsXHJcbiAgdGVtcGxhdGVVcmw6ICdhcHAvY29tcG9uZW50cy9ncmlkL2dyaWQuaHRtbCcsXHJcbiAgc3R5bGVVcmxzOiBbJ2FwcC9jb21wb25lbnRzL2dyaWQvZ3JpZC5jc3MnXSxcclxuICBkaXJlY3RpdmVzOiBbV3JhcHBlckNtcCwgQ09SRV9ESVJFQ1RJVkVTXVxyXG59KVxyXG5leHBvcnQgY2xhc3MgR3JpZFBhZ2Uge1xyXG59XHJcbiJdfQ==
