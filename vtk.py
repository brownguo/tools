import vtk

aRenderer = vtk.vtkRenderer();
renWin = vtk.vtkRenderWindow();
renWin.AddRenderer(aRenderer);
iren = vtk.vtkRenderWindowInteractor();
iren.SetRenderWindow(renWin);

# The following reader is used tvtkRenderero read a series of 2D slices(images)
# that compose the volume.Theslicedimensions are set, and the
#  pixel spacing.The data Endianness must also be specified.The reader
#  uses the FilePrefix in combination with the slice number to construct
# filenames using the format FilePrefix. % d.(In this case the FilePrefix
# is the root name of the file.
v16 = vtk.vtkDICOMImageReader();
v16.SetDataByteOrderToLittleEndian();
v16.SetDirectoryName("D://dicom");
v16.SetDataSpacing(3.2, 3.2, 1.5);

# An isosurface, or contour value of 500 is known to correspond to the
# skin of the patient.Once generated, a vtkPolyDataNormals filter is
# used to create normals for smooth surface shading during rendering.
skinExtractor = vtk.vtkContourFilter();
skinExtractor.SetInputConnection(v16.GetOutputPort());
skinExtractor.SetValue(0, 500);
skinNormals = vtk.vtkPolyDataNormals();
skinNormals.SetInputConnection(skinExtractor.GetOutputPort());
skinNormals.SetFeatureAngle(60.0);
skinMapper = vtk.vtkPolyDataMapper();
skinMapper.SetInputConnection(skinNormals.GetOutputPort());
skinMapper.ScalarVisibilityOff();

skin = vtk.vtkActor();
skin.SetMapper(skinMapper);

outlineData = vtk.vtkOutlineFilter();
outlineData.SetInputConnection(v16.GetOutputPort());
mapOutline = vtk.vtkPolyDataMapper();
mapOutline.SetInputConnection(outlineData.GetOutputPort());
outline = vtk.vtkActor();
outline.SetMapper(mapOutline);
outline.GetProperty().SetColor(0, 0, 0);

aCamera = vtk.vtkCamera();
aCamera.SetViewUp(0, 0, -1);
aCamera.SetPosition(0, 1, 0);
aCamera.SetFocalPoint(0, 0, 0);
aCamera.ComputeViewPlaneNormal();

# Actors are added to the renderer.An initial camera view is created.
# The Dolly() method moves the camera towards the FocalPoint,
# thereby enlarging the image.
aRenderer.AddActor(outline);
aRenderer.AddActor(skin);
aRenderer.SetActiveCamera(aCamera);
aRenderer.ResetCamera();
aCamera.Dolly(1.5);

aRenderer.SetBackground(1, 1, 1);
renWin.SetSize(640, 480);
aRenderer.ResetCameraClippingRange();

iren.Initialize();
iren.Start();

v16.Delete();
skinExtractor.Delete();
skinNormals.Delete();
skinMapper.Delete();
skin.Delete();
outlineData.Delete();
mapOutline.Delete();
outline.Delete();
aCamera.Delete();
iren.Delete();
renWin.Delete();
aRenderer.Delete();
