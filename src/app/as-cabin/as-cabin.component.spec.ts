import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AsCabinComponent } from './as-cabin.component';

describe('AsCabinComponent', () => {
  let component: AsCabinComponent;
  let fixture: ComponentFixture<AsCabinComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AsCabinComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AsCabinComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
