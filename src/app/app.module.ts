import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { CabinComponent } from './cabin/cabin.component';
import { DeliverComponent } from './deliver/deliver.component';
import { SigninComponent } from './signin/signin.component';
import { NewaccComponent } from './newacc/newacc.component';
import { FindfoodsComponent } from './findfoods/findfoods.component';
import { AfterloginComponent } from './afterlogin/afterlogin.component';
import { LostpwComponent } from './lostpw/lostpw.component';
import { AsCabinComponent } from './as-cabin/as-cabin.component';
import { AsDeliverComponent } from './as-deliver/as-deliver.component';
import { AsCustomerComponent } from './as-customer/as-customer.component';


@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AboutComponent,
    CabinComponent,
    DeliverComponent,
    SigninComponent,
    NewaccComponent,
    FindfoodsComponent,
    AfterloginComponent,
    LostpwComponent,
    AsCabinComponent,
    AsDeliverComponent,
    AsCustomerComponent,
  
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
