import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { CabinComponent } from './cabin/cabin.component';
import { DeliverComponent } from './deliver/deliver.component';
import { CustomerComponent } from './customer/customer.component';
import { SigninComponent } from './signin/signin.component';
import { NewaccComponent } from './newacc/newacc.component';
import { AsCabinComponent } from './as-cabin/as-cabin.component';
import { AsDeliverComponent } from './as-deliver/as-deliver.component';
import { AsCustomerComponent } from './as-customer/as-customer.component';
import { AfterAddingCabinComponent } from './after-adding-cabin/after-adding-cabin.component';
import { AfterAddingCustomerComponent } from './after-adding-customer/after-adding-customer.component';
import { AfterAddingDeliverComponent } from './after-adding-deliver/after-adding-deliver.component';
import { AfterValidCabinComponent } from './after-valid-cabin/after-valid-cabin.component';
import { AfterValidCustomerComponent } from './after-valid-customer/after-valid-customer.component';
import { AfterValidDeliverComponent } from './after-valid-deliver/after-valid-deliver.component';
import { RouterModule } from '@angular/router';

import { FormsModule,ReactiveFormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { MatSliderModule } from '@angular/material/slider';
import { MatButtonModule } from '@angular/material/button';


@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AboutComponent,
    CabinComponent,
    DeliverComponent,
    CustomerComponent,
    SigninComponent,
    NewaccComponent,
    AsCabinComponent,
    AsDeliverComponent,
    AsCustomerComponent,
    AfterAddingCabinComponent,
    AfterAddingCustomerComponent,
    AfterAddingDeliverComponent,
    AfterValidCabinComponent,
    AfterValidCustomerComponent,
    AfterValidDeliverComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    BrowserAnimationsModule,

    MatSliderModule,
    MatButtonModule


  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
