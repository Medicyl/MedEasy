import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { UserComponent } from './components/user/user.component';
import { MedicineComponent } from './components/medicine/medicine.component';
import { NavComponent } from './components/nav/nav.component';

@NgModule({
  declarations: [
    AppComponent,
    UserComponent,
    MedicineComponent,
    NavComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
