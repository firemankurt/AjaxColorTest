# AjaxColorTest

- Add plugin to October.
- Use the supplied testone.htm page in your theme.

View page in browser.
Press the Change color button to trigger ajax call to component.

Expected Results should be:
- Page loads and methods:
    - Init (blue) 
    - onRun (red or yellow) (onRun color is set in component Color property).
- Button press for first component:
    - triggers Ajax call 
    - Init (blue) 
    - onChangeColor (green).
- Button press for second component:
    - triggers Ajax call 
    - Init (blue) 
    - onChangeColor (green).


Results I have been getting:
- Page loads and methods:
    - Init (blue) 
    - onRun (red or yellow) (onRun color is set in component Color property).
- Button press for first component:
    - triggers Ajax call 
    - Init (blue) 
    - onChangeColor (green).
- Button press for second component:
    - triggers Ajax call 
    - Init (blue) ( never triggers onChangeColor )
