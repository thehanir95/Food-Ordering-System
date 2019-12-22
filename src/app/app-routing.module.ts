import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { CabinComponent } from './cabin/cabin.component';
import { DeliverComponent } from './deliver/deliver.component';
import { SigninComponent } from './signin/signin.component';
import { NewaccComponent } from './newacc/newacc.component';
import { AfterloginComponent } from './afterlogin/afterlogin.component';
import { LostpwComponent } from './lostpw/lostpw.component';
import { AsCabinComponent } from './as-cabin/as-cabin.component';
import { AsCustomerComponent } from './as-customer/as-customer.component';
import { AsDeliverComponent } from './as-deliver/as-deliver.component';


const routes: Routes = [
  {path :'' , component : HomeComponent },
  {path : 'about' , component : AboutComponent },
  {path :'cabin' , component : CabinComponent },
  {path : 'deliver' , component : DeliverComponent },
  {path : 'signin' , component : SigninComponent },
  {path : 'newacc' , component : NewaccComponent },
  {path : 'afterlogin' , component : AfterloginComponent },
  {path : 'lostpw' , component : LostpwComponent },
  {path : 'as-cabin' , component : AsCabinComponent },
  {path : 'as-customer' , component : AsCustomerComponent },
  {path : 'as-deliver' , component : AsDeliverComponent },
  
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
