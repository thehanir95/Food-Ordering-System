import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FindfoodsComponent } from './findfoods.component';

describe('FindfoodsComponent', () => {
  let component: FindfoodsComponent;
  let fixture: ComponentFixture<FindfoodsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FindfoodsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FindfoodsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
